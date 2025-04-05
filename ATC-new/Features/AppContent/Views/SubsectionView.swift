import SwiftUI

struct SubsectionView: View {
    let section: AppContent
    
    var body: some View {
        Text("Coming soon: \(section.title)")
            .navigationTitle(section.title)
    }
} 