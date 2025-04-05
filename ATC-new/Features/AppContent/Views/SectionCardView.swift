import SwiftUI

struct SectionCardView: View {
    let section: AppContent
    
    private var icon: String {
        switch section.title {
        case "VFR Training":
            return "airplane.circle.fill"
        case "IFR Training":
            return "airplane.circle"
        default:
            return "questionmark.circle"
        }
    }
    
    var body: some View {
        NavigationLink(destination: SubsectionView(section: section)) {
            VStack(alignment: .leading, spacing: 12) {
                Image(systemName: icon)
                    .font(.system(size: 32))
                    .foregroundColor(.accentColor)
                
                Text(section.title)
                    .font(.headline)
                    .foregroundColor(.primary)
                
                Text(section.description)
                    .font(.subheadline)
                    .foregroundColor(.secondary)
                    .lineLimit(3)
            }
            .padding()
            .frame(maxWidth: .infinity, alignment: .leading)
            .background(
                RoundedRectangle(cornerRadius: 12)
                    .fill(Color(.systemBackground))
                    .shadow(radius: 2)
            )
        }
        .buttonStyle(ScaleButtonStyle())
    }
}

struct ScaleButtonStyle: ButtonStyle {
    func makeBody(configuration: Configuration) -> some View {
        configuration.label
            .scaleEffect(configuration.isPressed ? 0.95 : 1)
            .animation(.easeInOut(duration: 0.2), value: configuration.isPressed)
    }
} 